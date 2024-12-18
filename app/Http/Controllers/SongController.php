<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index() {
        $songs = collect([
            [
                'title' => 'River',
                'artist' => 'Miley Cyrus',
                'album' => 'Endless Summer Vocation',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 20
                ]
            ],
            [
                'title' => 'Song for You',
                'artist' => 'Lee Isaacs',
                'album' => 'After the Apocalypses',
                'duration' => [
                    'minutes' => 2,
                    'seconds' => 48
                ]
            ],
            [
                'title' => "คำถามซึ่งไร้คนตอบ",
                'artist' => 'Getsunova',
                'album' => 'The First Album',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 29
                ]
            ],
            [
                'title' => 'Blinding Lights',
                'artist' => 'The Weeknd',
                'album' => 'After Hours',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 22
                ]
            ],
            [
                'title' => 'Shallow',
                'artist' => 'Lady Gaga & Bradley Cooper',
                'album' => 'A Star Is Born Soundtrack',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 35
                ]
            ],
            [
                'title' => 'Bohemian Rhapsody',
                'artist' => 'Queen',
                'album' => 'A Night at the Opera',
                'duration' => [
                    'minutes' => 5,
                    'seconds' => 55
                ]
            ],
            [
                'title' => 'Someone Like You',
                'artist' => 'Adele',
                'album' => '21',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 45
                ]
            ],
            [
                'title' => 'Lose Yourself',
                'artist' => 'Eminem',
                'album' => '8 Mile Soundtrack',
                'duration' => [
                    'minutes' => 5,
                    'seconds' => 26
                ]
            ],
            [
                'title' => 'Shape of You',
                'artist' => 'Ed Sheeran',
                'album' => 'Divide',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 53
                ]
            ],
            [
                'title' => 'Hotel California',
                'artist' => 'Eagles',
                'album' => 'Hotel California',
                'duration' => [
                    'minutes' => 6,
                    'seconds' => 30
                ]
            ]
        ]);

        return view('songs.index', [
            'title' => 'Song Playlist',
            'songs' => $songs
        ]);
    }
}
