<?php

namespace Dynamic\Link\Task;

use gorriecoe\Link\Models\Link;
use SilverStripe\Control\Director;
use SilverStripe\Dev\BuildTask;
use SilverStripe\Subsites\Model\Subsite;

class LinkableMigrationTask extends BuildTask
{
    /**
     * @var string
     */
    protected $title = 'Linkable to SilverStripe Link Migration';

    /**
     * @var string
     */
    protected $description = 'Migrate Linkable Link records to SilverStripe Link';

    /**
     * @var string
     */
    private static $segment = 'LinkableMigrationTask';

    /**
     * @var bool
     */
    protected $enabled = true;

    /**
     * @param $request
     */
    public function run($request)
    {
        if (class_exists(Subsite::class)) {
            // disable the subsite filter because it returns null otherwise
            $initialSubsiteFilter = Subsite::$disable_subsite_filter;
            Subsite::$disable_subsite_filter = true;
        }

        $this->migrateLinks();

        if (class_exists(Subsite::class)) {
            // reset the subsite filter to what it was
            Subsite::$disable_subsite_filter = $initialSubsiteFilter;
        }
    }

    /**
     *
     */
    public function migrateLinks()
    {
        $links = \Sheadawson\Linkable\Models\Link::get();
        $ct = 0;
        foreach ($links as $link) {
            $object = $link->newClassInstance(Link::class);
            $object->write();
            static::write_message("{$object->Title} updated.");
            $ct++;
        }
        static::write_message("{$ct} records updated.");
    }

    /**
     * @param $message
     */
    protected static function write_message($message)
    {
        if (Director::is_cli()) {
            echo "{$message}\n";
        } else {
            echo "{$message}<br><br>";
        }
    }
}
