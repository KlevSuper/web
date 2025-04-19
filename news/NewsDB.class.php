<?php
require_once 'INewsDB.class.php';

class NewsDB implements INewsDB, \IteratorAggregate {
    const DB_NAME = 'news.db';
    private \SQLite3 $_db;
    private array $items = [];
    
    protected function getDb(): \SQLite3 {
        return $this->_db;
    }
    
    private function getCategories(): void {
        $result = $this->_db->query("SELECT id, name FROM category");
        if ($result) {
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $this->items[$row['id']] = $row['name'];
            }
        }
    }

    public function __construct() {
        $isDbExists = file_exists(self::DB_NAME);
        
        $this->_db = new \SQLite3(self::DB_NAME);
        $this->_db->enableExceptions(true);
        
        if (!$isDbExists) {
            $this->createDatabase();
        }
        
        $this->getCategories();
    }

    private function createDatabase(): void {
        try {
            $sql = "CREATE TABLE msgs(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT,
                category INTEGER,
                description TEXT,
                source TEXT,
                datetime INTEGER
            )";
            $this->_db->exec($sql);
            
            $sql = "CREATE TABLE category(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT
            )";
            $this->_db->exec($sql);
            
            $sql = "INSERT INTO category(id, name)
                SELECT 1 as id, 'Политика' as name
                UNION SELECT 2 as id, 'Культура' as name
                UNION SELECT 3 as id, 'Спорт' as name";
            $this->_db->exec($sql);
        } catch (\Exception $e) {
            die("Ошибка при создании БД: " . $e->getMessage());
        }
    }

    /**
     * @return \Traversable
     */
    #[\ReturnTypeWillChange]
    public function getIterator() {
        return new \ArrayIterator($this->items);
    }
    
    public function saveNews($title, $category, $description, $source) {
        try {
            $title = $this->_db->escapeString($title);
            $description = $this->_db->escapeString($description);
            $source = $this->_db->escapeString($source);
            $dt = time();
            
            $sql = "INSERT INTO msgs(title, category, description, source, datetime)
                    VALUES('$title', $category, '$description', '$source', $dt)";
            return (bool)$this->_db->exec($sql);
        } catch (\Exception $e) {
            return false;
        }
    }
    
    public function getNews() {
        try {
            $sql = "SELECT msgs.id as id, title, category.name as category, 
                    description, source, datetime
                    FROM msgs, category
                    WHERE category.id = msgs.category
                    ORDER BY msgs.id DESC";
            $result = $this->_db->query($sql);
            
            if (!$result) return false;
            
            $news = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $news[] = $row;
            }
            
            return $news;
        } catch (\Exception $e) {
            return false;
        }
    }
    
    public function deleteNews($id) {
        try {
            $sql = "DELETE FROM msgs WHERE id = " . (int)$id;
            return (bool)$this->_db->exec($sql);
        } catch (\Exception $e) {
            return false;
        }
    }
    
    public function __destruct() {
        $this->_db->close();
    }
}