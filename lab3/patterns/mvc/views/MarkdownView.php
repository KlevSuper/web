<?php
namespace patterns\mvc\views;

class MarkdownView
{
    public function render(array $userData): string
    {
        $output = "# Список пользователей\n\n";
        
        foreach ($userData as $user) {
            $output .= "## {$user['lastName']} {$user['firstName']}\n";
            $output .= "- **Email:** {$user['email']}\n\n";
        }
        
        return $output;
    }
}