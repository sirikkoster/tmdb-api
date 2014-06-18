<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

/**
 * Class People
 * @package Tmdb\Api
 * @see http://docs.themoviedb.apiary.io/#people
 */
class People extends AbstractApi
{
    /**
     * Get the general person information for a specific id.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getPerson($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id, $parameters, $headers);
    }

    /**
     * Get the credits for a specific person id.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getCredits($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->getCombinedCredits($person_id, $parameters, $headers);
    }

    /**
     * Get the movie credits for a specific person id.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getMovieCredits($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/movie_credits', $parameters, $headers);
    }

    /**
     * Get the TV credits for a specific person id.
     *
     * To get the expanded details for each record, call the /credit method with the provided credit_id.
     * This will provide details about which episode and/or season the credit is for.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getTvCredits($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/tv_credits', $parameters, $headers);
    }

    /**
     * Get the combined (movie and TV) credits for a specific person id.
     *
     * To get the expanded details for each TV record, call the /credit method with the provided credit_id.
     * This will provide details about which episode and/or season the credit is for.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getCombinedCredits($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/combined_credits', $parameters, $headers);
    }

    /**
     * Get the images for a specific person id.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getImages($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/images', $parameters, $headers);
    }

    /**
     * Get the changes for a specific person id.
     *
     * Changes are grouped by key, and ordered by date in descending order.
     *
     * By default, only the last 24 hours of changes are returned.
     * The maximum number of days that can be returned in a single request is 14.
     * The language is present on fields that are translatable.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getChanges($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/changes', $parameters, $headers);
    }

    /**
     * Get the external ids for a specific person id.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getExternalIds($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/external_ids', $parameters, $headers);
    }

    /**
     * Get the images that have been tagged with a specific person id.
     *
     * We return all of the image results with a media object mapped for each image.
     *
     * @param $person_id
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     *
     * @todo Still does not contain the media and media_type properties, this will be worked on later on.
     */
    public function getTaggedImages($person_id, array $parameters = array(), array $headers = array())
    {
        return $this->get('person/' . $person_id . '/tagged_images', $parameters, $headers);
    }

    /**
     * Get the list of popular people on The Movie Database. This list refreshes every day.
     *
     * @param  array $parameters
     * @param  array $headers
     * @return mixed
     */
    public function getPopular(array $parameters = array(), array $headers = array())
    {
        return $this->get('person/popular', $parameters, $headers);
    }

    /**
     * Get the latest person id.
     *
     * @return mixed
     */
    public function getLatest()
    {
        return $this->get('person/latest');
    }
}
