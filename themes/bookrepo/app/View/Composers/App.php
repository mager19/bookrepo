<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];


    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'heroFields' => $this->getHeroFields(),
            'featuredFields' => $this->getFeaturedFields(),
            'autoBooks' => $this->getAutoBooks()
        ];
    }



    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function getHeroFields()
    {
        // return get_field('block_title');
        return [
            'logo' => get_field('logo_site', 'option'),
            'heroInfo' => get_field('hero_information', 'option'),
            'heroIllustration' => get_field('hero_ilustration', 'option'),
        ];
    }

    public function getAutoBooks()
    {
        $nPost = get_field('how_many_books_do_you_want_to_show');
        $genres = get_field('select_the_genre');
        $idsGenres = [];

        if ($genres) {
            foreach ($genres as $genre) {
                array_push($idsGenres, $genre->term_id);
            }

            $args = array(
                'post_type' => 'book',
                'posts_per_page' => $nPost,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'genre',
                        'terms'    => $idsGenres,
                    ),
                ),
            );
        } else {
            $args = array(
                'post_type' => 'book',
                'posts_per_page' => $nPost,
                'order' => 'DESC'
            );
        }


        $query = get_posts($args);

        return [
            'nPosts' => $nPost,
            'gneres' => $genres,
            'posts' => $query
        ];
    }

    public function getFeaturedFields()
    {
        $selectedBooks =  get_field('select_the_books_you_want_to_display');
        $books = [];

        if ($selectedBooks) {
            foreach ($selectedBooks as $selectedBook) {
                // dump($selectedBook);
                $this_block = (object)[
                    'bookTitle' => $selectedBook->post_title,
                    'bookID' => $selectedBook->ID,
                    'bookImage' => get_the_post_thumbnail_url($selectedBook->ID)
                ];
                array_push($books, $selectedBook);
            }
        }


        return [
            'featuredTitle' => get_field('block_title'),
            'showManual' => get_field('show_books_manually'),
            'booksManually' => $books,
            'numberBooks' => get_field('how_many_books_do_you_want_to_show'),
            'genres' => get_field('select_the_genre'),
            // 'autoPosts' => getGenerPosts()
        ];
    }
}
