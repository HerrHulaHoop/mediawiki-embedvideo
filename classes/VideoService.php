<?php
/**
 * EmbedVideo
 * EmbedVideo Services List
 *
 * @license		MIT
 * @package		EmbedVideo
 * @link		https://www.mediawiki.org/wiki/Extension:EmbedVideo
 *
 **/
namespace EmbedVideo;

class VideoService {
	/**
	 * Available services.
	 *
	 * @var		array
	 */
	static private $services = array(
		'bambuser' => array(
			'embed'			=> '<iframe src="//embed.bambuser.com/broadcast/$1" width="$2" height="$3" frameborder="0"></iframe>',
			'default_ratio' => 512 / 394,
			'https_enabled'	=> true
		),
		'bambuser_channel' => array(
			'embed' 		=> '<iframe src="//embed.bambuser.com/channel/$1" width="$2" height="$3" frameborder="0"></iframe>',
			'default_ratio' => 512 / 394,
			'https_enabled'	=> true
		),
		'bing' => array(
			'embed'			=> '<iframe src="//hub.video.msn.com/embed/$1" width="$2" height="$3" frameborder="0" scrolling="no" noscroll></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true
		),
		'dailymotion' => array(
			'embed'			=> '<iframe src="//www.dailymotion.com/embed/video/$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true
		),
		'divshare' => array(
			'embed'			=> '<iframe src="//www.divshare.com/flash/video2?myId=$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true
		),
		'funnyordie' => array(
			'embed'			=> '<iframe src="http://www.funnyordie.com/embed/$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 640 / 390,
			'https_enabled'	=> false
		),
		'kickstarter' => array(
			'embed'			=> '<iframe src="$1/widget/video.html" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true
		),
		'metacafe' => array(
			'embed'			=> '<iframe src="http://www.metacafe.com/embed/$1/" width="$2" height="$3" frameborder="0" allowFullScreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> false
		),
		'msn' => array(
			'embed'			=> '<iframe src="//hub.video.msn.com/embed/$1" width="$2" height="$3" frameborder="0" scrolling="no" noscroll></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true
		),
		'rutube' => array(
			'embed'			=> '<iframe src="//rutube.ru/play/embed/$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true
		),
		'screen9' => array(
			'embed' 		=> 't',
			'default_ratio' => 579 / 358
		),
		'teachertube' => array(
			'embed'			=> '<iframe src="http://www.teachertube.com/embed/video/$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 640 / 370,
			'https_enabled'	=> false
		),
		'yahoo' => array(
			'embed'			=> '<iframe src="http://d.yimg.com/nl/vyc/site/player.html#vid=$1" width="$2" height="$3" frameborder="0"></iframe>'
		),
		'yandex' => array(
			'embed'			=> '$5'
		),
		'yandexvideo' => array(
			'embed'			=> '$5'
		),
		'youtube' => array(
			'embed'			=> '<iframe src="//www.youtube.com/embed/$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true,
			'url_regex'		=> array(
				'#v=([\d\w-_]+?)(?:&\S+?)?#is',
				'#youtu.be/([\d\w-_]+?)#is'
			),
			'id_regex'		=> array(
				'#([\d\w-_]+?)#is'
			)
		),
		'youtubeplaylist' => array(
			'embed'			=> '<iframe src="//www.youtube.com/embed/videoseries?list=$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true,
			'url_regex'		=> array(
				'#list=([\d\w-_]+?)(?:&\S+?)?#is'
			),
			'id_regex'		=> array(
				'#([\d\w-_]+?)#is'
			)
		),
		'videomaten' => array(
			'embed'			=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="$2" height="$3" id="videomat" align="middle"><param name="allowScriptAccess" value="sameDomain" /><param name="movie" value="http://89.160.51.62/recordMe/play.swf?id=$1" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="http://89.160.51.62/recordMe/play.swf?id=$1" loop="false" quality="high" bgcolor="#ffffff" width="$2" height="$3" name="videomat" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>',
			'default_ratio'	=> 300 / 200,
			'https_enabled'	=> false
		),
		'twitchchannel' => array(
			'embed'			=> '<object id="live_embed_player_flash" type="application/x-shockwave-flash" width="$2" height="$3" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=$1">
	<param name="allowFullScreen" value="true" />
	<param name="allowScriptAccess" value="always" />
	<param name="allowNetworking" value="all" />
	<param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
	<param name="flashvars" value="hostname=www.twitch.tv&channel=$1&auto_play=false&start_volume=100" />
</object>',
			'default_width'	=> 640,
			'default_ratio'	=> 620 / 378,
			'https_enabled'	=> false
		),
		'twitchvod' => array(
			'embed'			=> '<object id="clip_embed_player_flash" type="application/x-shockwave-flash" width="$2" height="$3" data="http://www.twitch.tv/widgets/archive_embed_player.swf" bgcolor="#000000">
	<param name="movie" value="http://www.twitch.tv/widgets/archive_embed_player.swf" />
	<param name="allowScriptAccess" value="always" />
	<param name="allowNetworking" value="all" />
	<param name="allowFullScreen" value="true" />
	<param name="flashvars" value="channel=$1&amp;auto_play=false&amp;start_volume=100&amp;chapter_id=$4" />
</object>',
			'default_width'	=> 640,
			'default_ratio'	=> 620 / 378,
			'https_enabled'	=> false
		),
		'vimeo' => array(
			'embed'			=> '<iframe src="//player.vimeo.com/video/$1" width="$2" height="$3" frameborder="0" allowfullscreen="true"></iframe>',
			'default_width'	=> 640,
			'default_ratio'	=> 16 / 9,
			'https_enabled'	=> true,
			'url_regex'		=> array(
				'#vimeo.com/([\d]+?)#is'
			),
			'id_regex'		=> array(
				'#([\d]+?)#is'
			)
		)
	);

	/**
	 * This object instance's service information.
	 *
	 * @var		array
	 */
	private $service = array();

	/**
	 * Video ID
	 *
	 * @var		array
	 */
	private $id = false;

	/**
	 * Main Constructor
	 *
	 * @access	private
	 * @return	void
	 */
	private function __construct($service) {
		$this->service = self::$services[$service];
	}

	/**
	 * Create a new object from a service name.
	 *
	 * @access	public
	 * @return	void
	 */
	static public function newFromName($service) {
		if (array_key_exists($service, self::$services)) {
			return new \EmbedVideo\VideoService($service);
		} else {
			return false;
		}
	}

	/**
	 * Function Documentation
	 *
	 * @access	public
	 * @param	string	Video ID/URL
	 * @return	boolean	Success
	 */
	public function setVideoID($id) {
		$id = $this->parseVideoID($id);
		if ($id !== false) {
			$this->id = $id;
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Parse the video ID/URL provided.
	 *
	 * @access	private
	 * @param	string	Video ID/URL
	 * @return	mixed	Parsed Video ID or false on failure.
	 */
	private function parseVideoID($id) {
		$regexes = array_merge((array) $this->service['id_regex'], (array) $this->service['url_regex']);
		if (is_array($regexes) && count($regexes)) {
			foreach ($regexes as $regex) {
				if (preg_match($regex, $id, $matches)) {
					$id = $matches[0];
					return $id;
				}
			}
			//If nothing matches and matches are specified then return false for an invalid ID/URL.
			return false;
		} else {
			//Service definition has not specified a sanitization/validation regex.
			return $id;
		}
	}

	/**
	 * Is HTTPS enabled?
	 *
	 * @access	public
	 * @return	boolean
	 */
	public function isHttpsEnabled() {
		return (bool) $this->service['https_enabled'];
	}

	/**
	 * Return default width if set.
	 *
	 * @access	public
	 * @return	mixed	Integer width or false if not set.
	 */
	public function getDefaultWidth() {
		return ($this->service['default_width'] > 0 ? $this->service['default_width'] : false);
	}

	/**
	 * Return default ratio if set.
	 *
	 * @access	public
	 * @return	mixed	Integer ratio or false if not set.
	 */
	public function getDefaultRatio() {
		return ($this->service['default_ratio'] > 0 ? $this->service['default_ratio'] : false);
	}
}
?>