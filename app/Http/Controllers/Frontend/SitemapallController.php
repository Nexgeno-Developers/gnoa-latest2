<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use DB;

class SitemapallController extends Controller
{
    
    public function newSitemap(Request $request, $page) {
        
        return 1;
        
        if($page == 'others'):
          $data = $this->generateOtherSitemap();
        elseif($page == 'courses'):
          $data = $this->generateCourseSitemap();
        endif; 

        //generate
        $directory = public_path('sitemap');
        $my_file = $directory . '/'.$data['name'].'.xml';
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
        $handle = fopen($my_file, 'w+');
        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

        foreach ($data['url'] as $url) {
            $priority = ($url == url('')) ? '1' : '0.8';
            $sitemapContent .= '
            <url>
                <loc>'.$url.'</loc>
                <lastmod>'.date('Y-m-d').'</lastmod>
                <changefreq>weekly</changefreq>
                <priority>'.$priority.'</priority>
            </url>';
        }
        $sitemapContent .= '</urlset>';
        fwrite($handle, $sitemapContent);
        fclose($handle);
        echo '<h2>'.ucfirst($data["name"]).' sitemap has been updated</h2>';
        echo '<br>';
        echo 'Access at <a target="_blank" href="'.url('sitemap/'.$data["name"].'.xml?'.time()).'">'.url('sitemap/'.$data["name"].'.xml').'</a>';
    }
    
    public function generateOtherSitemap(){
        $otherUrls = [
            url(''),
            url('/career'),
            url('/about-us'),
            url('/our-branches'),
            url('/contact-us'),
            url('/privacy-policy'),
            url('/terms-conditions'),
        ]; 
        
        return ['url' => $otherUrls, 'name' => 'others'];
    }

    public function generateCourseSitemap() {
        $courseUrls = [
            url('courses'),
        ];
        // Fetch all course slugs in a single query
        $courses_slug = DB::table('courses')->pluck('slug');

        foreach ($courses as $course) {
            $courseUrls[] = url('/course/'.$courses_slug);
        }

        return ['url' => $courseUrls, 'name' => 'courses'];
    }   
    
}
