<?php
namespace Hellodialog\ApiWrapper\Contracts;

use Exception;

interface HelloDialogApiInterface
{

    /**
     * Clears conditions and data
     *
     * @return $this
     */
    public function clear();

    /**
     * @param array $data
     * @return $this
     */
    public function data(array $data);

    /**
     * @param $key
     * @param mixed $value
     * @return mixed
     */
    public function parameter($key, $value = false);

    /**
     * Sets a key value pair with a given condition
     *
     * @param string $key
     * @param mixed  $value
     * @param string $condition
     * @return $this
     * @throws Exception
     */
    public function condition($key, $value, $condition = 'equals');

    /**
     * Sets a page for 100 results per page
     *
     * @param $page
     * @return mixed
     */
    public function page($page);

    /**
     * Perfoms a request for the PUT method
     *
     * @param string $id
     * @return mixed
     * @throws Exception
     */
    public function put($id = null);

    /**
     * Perfoms a request for the DELETE method
     *
     * @param string $id
     * @return mixed
     * @throws Exception
     */
    public function delete($id);

    /**
     * Perfoms a request for the GET method
     *
     * @param string $id
     * @return mixed
     * @throws Exception
     */
    public function get($id = null);

    /**
     * Perfoms a request for the POST method
     *
     * @return mixed
     * @throws Exception
     */
    public function post();

}
