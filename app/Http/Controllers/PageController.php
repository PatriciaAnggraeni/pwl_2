<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hello()
    {
        return "Selamat Datang";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_about_us()
    {
        echo "
            <a href='https://www.educastudio.com/about-us'>https://www.educastudio.com/about-us
            </a>
        ";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_product()
    {
        echo "
            <ul>
                <li>
                    <a href='https://www.educastudio.com/category/marbel-edu-games'>https://www.educastudio.com/category/marbel-edu-games</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>https://www.educastudio.com/category/marbel-and-friends-kids-games</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/riri-story-books'>https://www.educastudio.com/category/riri-story-books</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/category/kolak-kids-songs'>https://www.educastudio.com/category/kolak-kids-songs</a>
                </li>
            </ul>
        ";
    }

    public function show_news($keyword) {

        if ($keyword == "show_news") {
            echo "
                <ul>
                    <li>
                        <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>
                    </li>
                    <li>
                        <a href='https://www.educastudio.com/news'>https://www.educastudio.com/news</a>
                    </li>
                </ul>
            ";
        } else {
            return "Keyword Salah!";
        }
    }

    public function show_program()
    {
        echo "
            <ul>
                <li>
                    <a href='https://www.educastudio.com/program/karir'>https://www.educastudio.com/program/karir</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/kunjungan-industri'>https://www.educastudio.com/program/kunjungan-industri</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/magang'>https://www.educastudio.com/program/magang</a>
                </li>
            </ul>
        ";
    }

    public function index() {
        echo "
            <a href='https://www.educastudio.com/contact-us'>https://www.educastudio.com/contact-us</a>
        ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
