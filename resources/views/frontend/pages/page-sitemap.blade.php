<?php
use Carbon\Carbon;
?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc><?php echo url('/');?></loc>
            <?php
               $currentDateTime = Carbon::now();
               $newDateTime = Carbon::now()->subHour();
               echo"<lastmod>".$newDateTime->tz('EST')->toAtomString() ."</lastmod>";
            ?>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
        <url>
            <loc><?php echo url('/be-a-writer');?></loc>
            <?php
               $currentDateTime = Carbon::now();
               $newDateTime = Carbon::now()->subHour();
               echo"<lastmod>".$newDateTime->tz('EST')->toAtomString() ."</lastmod>";
            ?>
            <changefreq>daily</changefreq>
            <priority>0.80</priority>
        </url>

        <url>
            <loc><?php echo url('/contact-us');?></loc>
            <?php
               $currentDateTime = Carbon::now();
               $newDateTime = Carbon::now()->subHour();
               echo"<lastmod>".$newDateTime->tz('EST')->toAtomString() ."</lastmod>";
            ?>
            <changefreq>daily</changefreq>
            <priority>0.80</priority>
        </url>

        <url>
            <loc><?php echo url('/login');?></loc>
            <?php
               $currentDateTime = Carbon::now();
               $newDateTime = Carbon::now()->subHour();
               echo"<lastmod>".$newDateTime->tz('EST')->toAtomString() ."</lastmod>";
            ?>
            <changefreq>daily</changefreq>
            <priority>0.80</priority>
        </url>

        <url>
            <loc><?php echo url('/be-writer-informations');?></loc>
            <?php
               $currentDateTime = Carbon::now();
               $newDateTime = Carbon::now()->subHour();
               echo"<lastmod>".$newDateTime->tz('EST')->toAtomString() ."</lastmod>";
            ?>
            <changefreq>daily</changefreq>
            <priority>0.80</priority>
        </url>
        

</urlset>