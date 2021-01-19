<?php declare(strict_types=1);

/**
 * Class pluginBluditOldPostsWarning
 */
class pluginBluditThemeHacker extends Plugin
{

    /**
     * Init the plugin
     */
    public function init()
    {
        $this->dbFields = [
        ];
    }



    /**
     * Returns the form for changing the settings fo the plugin.
     * @return string
     * @see See `form.php` for the formular.
     */
    public function form(): string
    {
        global $L;
    }

}