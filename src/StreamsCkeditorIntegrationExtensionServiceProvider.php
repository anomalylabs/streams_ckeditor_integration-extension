<?php namespace Anomaly\StreamsCkeditorIntegrationExtension;

use Illuminate\Support\ServiceProvider;

/**
 * Class StreamsCkeditorIntegrationExtensionServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Extension\StreamsCkeditorIntegration
 */
class StreamsCkeditorIntegrationExtensionServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $target = app('streams.asset.path') . '/ckeditor';

        if (config('app.debug') and !is_dir($target)) {

            app('files')->copyDirectory(__DIR__ . '/../resources/ckeditor', $target);
        }
    }
}
 