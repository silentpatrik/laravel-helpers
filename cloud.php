if (! function_exists("cloud_copy")) {
    /**
     * Copy files from one disk to another.
     *
     * @param string $diskFrom          from disk name
     * @param string $diskTo            to disk name
     * @param array $directories        the directories that exts in from disk and will be put on to         
     * @return void
     */
    function copy_storage($from, $to, $directories = ['/'])
    {
if(!is_array($directories) $directories=[$directories];
collect($directories)->each(function($directory){
        foreach (Storage::disk($from)->files($directory) as $file) {
            if (Storage::disk($to)->exists($file) && Storage::disk($to)->size($file) != Storage::disk($from)->size($file)) {
                Storage::disk($to)->delete($file);
            }
            if (! Storage::disk($to)->exists($file)) {
                Storage::disk($to)->writeStream($file, Storage::disk($from)->readStream($file));
                echo "Copied: $file\n";
            }
        });
    }



}
