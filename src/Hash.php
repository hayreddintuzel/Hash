<?php 

/*
 * (c) Hayreddin Tüzel <hayredintuzel@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */


namespace htuzel\Hash;

class Hash
{

    /**
     * Hash string
     *
     * @var string
     */
    protected $hash = '';


    /**
     * Gets an hash with specific algorith
     *
     * @param string $algo (optional)
     * @param string $data
     *
     * @return void
     */
    public function __construct(string $algo = 'md5', $data)
    {
        $this->hash = hash($algo, $data);
    }

    /**
     * Returns hash attribute
     * 
     * @return string
     */
    public static function getHash() {
        return $this->hash;
    }
}