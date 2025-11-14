<?php

return [
    'available' => [
        'code' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'High', // gpt-4
            'Good', // gpt-3.5-turbo
            'gpt-4o',
            'gpt-4o-mini',
            'o1-preview',
            'o1-mini',
            'o1',
            'o3-mini',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'chatbot' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'gpt-4o-mini',
            'gpt-4o',
            'Good', // gpt-3.5-turbo
            'High', // gpt-4
            'o1-preview',
            'o1-mini',
            'o1',
            'o3-mini',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'ai-embedding' => [
            'text-embedding-ada-002',
            'text-embedding-3-large',
            'text-embedding-3-small'
        ],
        'ai-doc-chat' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'gpt-4o-mini',
            'gpt-4o',
            'gpt-4',
            'gpt-3.5-turbo',
            'o1-preview',
            'o1-mini',
            'o1',
            'o3-mini',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'ai-chat' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'gpt-4o-mini',
            'gpt-4o',
            'Good', // gpt-3.5-turbo
            'High', // gpt-4
            'o1-preview',
            'o1-mini',
            'o1',
            'o3-mini',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'image' => [
            "dall-e-3", // dall-e-3
            "dall-e-2",
            "gpt-image-1"
        ],
        'long-article' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'High', // gpt-4
            'Good', // gpt-3.5-turbo
            'gpt-4o',
            'gpt-4o-mini',
            'o1-preview',
            'o1-mini',
            'o3-mini',
            'o1',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'speech-to-text' => [
            'Good', // gpt-4o-mini-transcribe
            'gpt-4o-transcribe',
            'whisper-1',
        ],
        'template-data' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'Good', // gpt-3.5-turbo
            'High', // gpt-4
            'gpt-4o',
            'gpt-4o-mini',
            'o1-preview',
            'o1-mini',
            'o3-mini',
            'o1',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'vision-chat' => [
            'gpt-5',
            'gpt-5-mini',
            'gpt-5-nano',
            'gpt-5-chat-latest',
            'gpt-4o',
            'gpt-4o-mini',
            'o1',
            'gpt-4.5-preview',
            'o4-mini',
            'gpt-4.1',
            'gpt-4.1-mini',
            'gpt-4.1-nano'
        ],
        'voice-over' => [
            'TTS',
            'TTS HD',
            'Good' // 'GPT-4o Mini TTS'
        ]
    ],

    'mapping' => [
        'chatbot'=>[
            'Good' => 'gpt-3.5-turbo',
            'High' => 'gpt-4'
        ],
        'ai-chat'=>[
            'Good' => 'gpt-3.5-turbo',
            'High' => 'gpt-4'
        ],
        'image' => [
            'Good' => 'dall-e-3'
        ],
        'template-data' => [
            'Good' => 'gpt-3.5-turbo',
            'High' => 'gpt-4'
        ],
        'long-article' => [
            'Good' => 'gpt-3.5-turbo',
            'High' => 'gpt-4'
        ],
        'code' => [
            'Good' => 'gpt-3.5-turbo',
            'High' => 'gpt-4',
        ],
        'speech-to-text' => [
            'Good' => 'gpt-4o-mini-transcribe'
        ],
        'voice-over' => [
            'Good' => 'GPT-4o Mini TTS'
        ]
    ],
];
