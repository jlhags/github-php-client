<?php

require_once(__DIR__ . '/../GitHubObject.php');
require_once(__DIR__ . '/GitHubUser.php');


class GitHubPullReview extends GitHubObject
{
	/* (non-PHPdoc)
	 * @see GitHubObject::getAttributes()
	 */
	protected function getAttributes()
	{
		return array_merge(parent::getAttributes(), array(
			'id' => 'int',
			'body' => 'string',
			'commit_id' => 'string',
			'user' => 'GitHubUser',
		  'state' => 'string'
		));
	}

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $body;


	/**
	 * @var GitHubUser
	 */
	protected $user;

	protected $state;


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	public function getState()
	{
		return $this->state;
	}

	/**
	 * @return string
	 */
	public function getBody()
	{
		return $this->body;
	}


	/**
	 * @return string
	 */
	public function getCommitId()
	{
		return $this->commit_id;
	}

	/**
	 * @return GitHubUser
	 */
	public function getUser()
	{
		return $this->user;
	}


	/**
	 * @return GitHubPullCommentLinks
	 */
	public function getLinks()
	{
		return $this->links;
	}

}

