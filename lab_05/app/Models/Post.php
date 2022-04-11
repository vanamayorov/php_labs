<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isNull;

define('PATH_TO_FILE', '../storage/app/public/appPosts.json');

class Post extends Model
{
    use HasFactory;

    protected static function readFile() {
        $res = file_get_contents(PATH_TO_FILE);
        $data = json_decode($res, true);
        if (is_null($data)) return [];
        return $data;
    }

    public static function getAll() {
        return self::readFile();
    }

    public static function getByCategory($category) {
        return array_filter(self::readFile(), function($item) use ($category) {
            return strtolower($item['category']) === $category;
        });
    }

    public static function findPost($id) {
        $index = array_search($id, array_column(self::readFile(), "id"));
        if($index === false) {
            return $id;
        }
        return self::readFile()[$index];
    }

    public static function createPost($category, $body, $title, $author) {
        $post_arr = self::readFile();
        array_push($post_arr, [
            "id" => count($post_arr) + 1,
            "title" => $title,
            "body" => $body,
            "category" => $category,
            "author" => $author
        ]);
        self::writeFile($post_arr);
    }

    public static function writeFile($data) {
        $jsonData = json_encode($data);
        file_put_contents(PATH_TO_FILE, $jsonData);
    }
}
