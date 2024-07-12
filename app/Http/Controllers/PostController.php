<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'My First Post',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
            [
                'title' => 'My Second Post',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
            [
                'title' => 'My Thrid Post',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
            [
                'title' => 'Ini Adalah Post Terakhirku',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
        ];

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function show($index)
    {
        $posts = [
            [
                'title' => 'My First Post',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
            [
                'title' => 'My Second Post',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
            [
                'title' => 'My Thrid Post',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
            [
                'title' => 'Ini Adalah Post Terakhirku',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam modi cupiditate consectetur voluptate laudantium, amet recusandae atque necessitatibus quam repellendus consequatur autem, doloribus in nesciunt sint sed ut odit eligendi.'
            ],
        ];

        return view('post', [
            'title' => $posts[$index]['title'],
            'body' => $posts[$index]['body']
        ]);
    }
}
