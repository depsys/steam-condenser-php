<?php
/**
 * @author Sebastian Staudt
 * @license http://www.opensource.org/licenses/bsd-license.php Modified BSD License
 * @package Steam Interface Package (PHP)
 * @subpackage SteamPacket
 * @version $Id$
 */

class A2A_RULES_RequestPacket extends SteamPacket
{	
	/**
	 * @param long $challengeNumber
	 */
	public function __construct($challengeNumber = "\xFF\xFF\xFF\xFF")
	{
		parent::__construct(SteamPacket::A2A_RULES_REQUEST_HEADER, $challengeNumber);
	}
	
	/**
	 * @return String
	 */
	public function __toString()
	{
		$packetData = pack("c4", 0xFF, 0xFF, 0xFF, 0xFF);
		$packetData .= pack("cV", $this->headerData, $this->contentData);
		
		return $packetData;
	}
}
?>