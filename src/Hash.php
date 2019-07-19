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
     * Gets an hash with specific algorith
     *
     * @param string $algo (optional)
     * @param string $data
     *
     * @return string
     */
    public function getHash(string $algo = 'md5', $data)
    {
        return hash($algo, $data);
    }
}