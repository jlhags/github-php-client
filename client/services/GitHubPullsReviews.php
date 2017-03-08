<?php

require_once(__DIR__ . '/../GitHubClient.php');
require_once(__DIR__ . '/../GitHubService.php');
require_once(__DIR__ . '/../objects/GitHubPullReview.php');


class GitHubPullsReviews extends GitHubService
{
	public function __construct(GitHubClient $client)
	{
		parent::__construct($client);
	}
	public function requestReviews($owner, $repo, $number,$reviewers)
	{
		return $this->client->request("/repos/$owner/$repo/pulls/$number/requested_reviewers","POST",json_encode(array('reviewers'=>$reviewers)),201,'');
	}

	public function getReviews($owner, $repo, $number)
	{
		return $this->client->request("/repos/$owner/$repo/pulls/$number/reviews","get",null,200,'GitHubPullReview');
	}
}