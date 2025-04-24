<?php
class FileModel {
    private $path;
    private $ignore = ['index.php','controllers', 'models', 'views', 'assets'];

    public function __construct($path) {
        $this->path = $path;
    }

    /**
     * Devuelve array con info de archivos y directorios.
     * Cada elemento: ['name'=>string, 'isDir'=>bool]
     */
    public function getDirectoryItems() {
        $items = [];
        foreach (scandir($this->path) as $entry) {
            if ($entry === '.' || $entry === '..') continue;
            if (in_array($entry, $this->ignore)) continue;
            $items[] = [
                'name' => $entry,
                'isDir' => is_dir($this->path . DIRECTORY_SEPARATOR . $entry)
            ];
        }
        return $items;
    }
}
