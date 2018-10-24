<?php

    /**
     * Whether to check for mediainfo
     */
    $mediainfo_check = true;

    $media_base_path = '.';

    /**
     * Feed info
     *
     * Basic feed information.
     *
     * description: basically anything you want, may appear in feed reader
     * link: dummy or real URL
     * title: your feed title as it appears in the feed reader
     * image: main image for feed (optional)
     */
    $conf = array(
        'description' => ':D',
        'link'        => 'http://www.example.com',
        'title'       => 'TTC - The Psychology of Performance: How to Be Your Best in Life',
        'image'       => 'cover.jpg'
    );

    /**
     * File extensions
     *
     * Extensions to use for feed item creation. Add your own extensions to be
     * included, the corresponding MIME types are generated automatically.
     */
    $exts = array(
        'flac' => 'audio/flac',
        'm4a'  => 'audio/mp4',
        'm4b'  => 'audio/mp4',
        'mp3'  => 'audio/mp3',
        'mp4'  => 'audio/mp4',
        'oga'  => 'audio/ogg',
        'ogg'  => 'audio/ogg'
    );

$base_url = 'http://198.143.181.104:8000/audiobooks/ttc-psy/';
