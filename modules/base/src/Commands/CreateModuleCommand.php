<?php

namespace APV\Base\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class CreateModuleCommand extends Command
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'module:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new module';

    /**
     * Create a new key generator command.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $moduleTemplates = \File::directories(__DIR__ . DIRECTORY_SEPARATOR . 'ModuleTemplates');
        $moduleTypes = [];
        foreach ($moduleTemplates as $dir) {
            $dir = explode(DIRECTORY_SEPARATOR, $dir);
            $moduleTypes[] = $dir[count($dir) - 1];
        }
        $choice = $this->choice("Choose module template:", $moduleTypes, 0);
        $moduleTargetPath = __DIR__ . '../../../../' . $this->argument('name');
        $moduleSource = __DIR__ . DIRECTORY_SEPARATOR . 'ModuleTemplates' . DIRECTORY_SEPARATOR . $choice;
        // create module folder
        \File::makeDirectory($moduleTargetPath);
        $this->info('Folder "' . $this->argument('name') . '" created!');

        $result = $this->copyFolder($moduleSource, $moduleTargetPath);

        if ($result) {
            $this->info('Copied module directory and file from template: ' . $choice);
            $this->info('Create a module successfully!');
        } else {
            $this->error('Error #'. $result);
        }
    }

    protected function replaceModuleName($content, $module)
    {
        $content = str_replace([
            '_NAME_UPPERCASE_',
            '_NAME_LOWERCASE_',
            '_NAME_CAPITALIZE_'
        ], [
            mb_strtoupper($module),
            mb_strtolower($module),
            ucfirst($module),
        ], $content);
        return $content;
    }

    protected function copyFolder($moduleSource, $moduleTargetPath)
    {
        if (!\File::isDirectory($moduleSource)) {
            return false;
        }
        if (!\File::isDirectory($moduleTargetPath)) {
            \File::makeDirectory($moduleTargetPath, 0777, true);
        }

        $items = new \FilesystemIterator($moduleSource);

        foreach ($items as $item) {
            $target = $moduleTargetPath . '/' . $this->replaceModuleName($item->getBasename(), $this->argument('name'));

            if ($item->isDir()) {
                $path = $item->getPathname();

                if (!$this->copyFolder($path, $target)) {
                    return false;
                }
            } else {
                $file_contents = \File::get($item->getPathname());
                if (!\File::put($target, $this->replaceModuleName($file_contents, $this->argument('name')))) {
                    return false;
                }
            }
        }
        return true;
    }
}
