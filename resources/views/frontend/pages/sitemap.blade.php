<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>{{ Route('getPostbySlug', $post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->tz('EST')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach
</urlset>