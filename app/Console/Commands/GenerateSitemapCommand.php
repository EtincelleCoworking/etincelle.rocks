<?php

namespace App\Console\Commands;

use App\Http\EtincelleApi;
use Icamys\SitemapGenerator\SitemapGenerator;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\URL;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'etincelle:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = date('c');

        $generator = new SitemapGenerator(URL::to('/'));
        $generator->sitemapFileName = public_path($generator->sitemapFileName);
        $generator->sitemapIndexFileName = public_path($generator->sitemapIndexFileName);
        $generator->addUrl(URL::route('homepage'), $now, 'daily', 0.5);
        foreach (EtincelleApi::getCities() as $city) {
            $generator->addUrl(URL::route('city', ['city_slug' => $city['slug']]), $now, 'daily', 0.5);
        }
        foreach (EtincelleApi::getJobs() as $job) {
            $generator->addUrl(URL::route('job', ['job_slug' => $job['slug']]), $now, 'daily', 0.5);
        }
        foreach (EtincelleApi::getUsers() as $user) {
            $generator->addUrl(URL::route('member.profile', ['user_slug' => $user['slug']]), $now, 'daily', 0.5);
        }
        $generator->createSitemap();
        $generator->writeSitemap();
    }
}
