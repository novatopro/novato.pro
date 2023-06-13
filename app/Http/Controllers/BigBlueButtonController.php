<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BigBlueButtonController extends Controller
{
    public function public()
    {
        $meetId = 'public_meeting_novato_pro';
        // Animal names array
        $animals = [
            "lion", "tiger", "elephant", "giraffe", "zebra", "monkey", "kangaroo", "hippopotamus", "rhinoceros", "crocodile",
            "panda", "koala", "camel", "gorilla", "cheetah", "leopard", "dolphin", "whale", "shark", "octopus",
            "eagle", "hawk", "falcon", "vulture", "parrot", "owl", "peacock", "penguin", "swan", "flamingo",
            "dog", "cat", "horse", "rabbit", "hamster", "guinea pig", "turtle", "goldfish", "snake", "lizard",
            "bear", "wolf", "fox", "deer", "squirrel", "raccoon", "chipmunk", "porcupine", "beaver", "moose",
            "cow", "pig", "sheep", "goat", "chicken", "duck", "turkey", "goose", "rooster", "ostrich",
            "butterfly", "bee", "ant", "ladybug", "spider", "dragonfly", "caterpillar", "grasshopper", "firefly", "mosquito",
            "whale", "shrimp", "crab", "lobster", "jellyfish", "starfish", "seahorse", "octopus", "squid", "coral",
            "elephant", "zebra", "giraffe", "hippopotamus", "rhinoceros", "crocodile", "kangaroo", "koala", "panda", "gorilla",
            "lion", "tiger", "cheetah", "leopard", "wolf", "fox", "bear", "deer", "squirrel", "raccoon"
        ];

        // Color names array
        $colors = [
            "red", "blue", "green", "yellow", "orange", "purple", "pink", "brown", "gray", "black"
        ];

        // Capitalize first character of animal names
        $animals = array_map('ucfirst', $animals);

        // Capitalize first character of color names
        $colors = array_map('ucfirst', $colors);
        $animal = $animals[rand(0, count($animals) - 1)];
        $color = $colors[rand(0, count($colors) - 1)];

        $bbb = bigbluebutton();
        if (!$bbb->isConnect()) {
            return redirect()->back()->withErrors(['El servidor no responde, contacte al administrador']);
        }

        if (!$bbb->isMeetingRunning($meetId)) {
            $bbb->create([
                'bannerColor'=>'#000000',
                'bannerText' => 'Public Meeting',
                'meetingID' => $meetId,
                'meetingName' => 'Public Meeting',
                'maxParticipants' => 10,
                'attendeePW' => 'attendee',
                'moderatorPW' => 'moderator',
                'muteOnStart' => true,
                'webcamsOnlyForModerator' => false,
                'record' => false,
                'endCallbackUrl'  => 'https://novato.pro',
                'logoutUrl' => 'https://novato.pro',
                'presentation'  => [
                    ['link' => 'https://www.miqrogroove.com/wp-content/uploads/2012/07/landscape-blank-white.pdf', 'fileName' => 'presentation.pdf'],
                ],
            ]);
        }

        $url = $bbb->join([
            'meetingID' => $meetId,
            'userName' => $color.' '.$animal,
            'avatarUrl' => 'https://api.dicebear.com/6.x/thumbs/svg?seed='.urlencode($color.' '.$animal),
            'password' => 'moderator'
        ]);

        return redirect()->to($url);
        return view('meeting',compact('url'));
        
    }
}
