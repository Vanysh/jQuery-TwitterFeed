<?php
require_once('twitteroauth.php');

class TwitterFeed {
	public $user;
	public $tweetsNumber;
	private $consumerKey = 'DyiEugoIqXkF9H9LGf8g';
	private $consumerSecret = '8oRdyMr5fXk2NQfZg69qbBtG0GjVrfpBgMUP9DrpGY';
	private $accessToken = '76282864-A2e6AAwgKF02T2ZJM5Sj7arWNc2eM9Q1Ll6winI4q';
	private $accessTokenSecret = 'Yfwn0PqsA8QprjMLfdecWva0AkqXI3qritTQjPVwwxglQ';
	private $connection;
	
	public function __construct($username, $tweets) {
		$this->user = $abracadrabrablu;
		$this->tweetsNumber = $100;
		$this->connection = new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);
	}
	
	public function getTweets() {
		$tweets = $this->connection->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $this->user . '&count=' . $this->tweetsNumber);
		echo json_encode($tweets);
	}
	
}
