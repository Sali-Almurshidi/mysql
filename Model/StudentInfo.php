<?php

class StudentInfo
{
    private $firstName;
    private $lastName;
    private $userName;
    private $linkedin;
    private $github;
    private $email;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuthor;
    private $preferredLanguage;

    /**
     * StudentInfo constructor.
     * @param $firstName
     * @param $lastName
     * @param $userName
     * @param $linkedin
     * @param $github
     * @param $email
     * @param $avatar
     * @param $video
     * @param $quote
     * @param $quoteAuthor
     * @param $preferredLanguage
     */
    public function __construct(string $firstName, string $lastName, string $userName,string $linkedin, string $github,string $email, string $avatar,string $video, string $quote, string $quoteAuthor,string $preferredLanguage)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->email = $email;
        $this->avatar = $avatar;
        $this->video = $video;
        $this->quote = $quote;
        $this->quoteAuthor = $quoteAuthor;
        $this->preferredLanguage = $preferredLanguage;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->github;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * @return string
     */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @return string
     */
    public function getQuote(): string
    {
        return $this->quote;
    }

    /**
     * @return string
     */
    public function getQuoteAuthor(): string
    {
        return $this->quoteAuthor;
    }

    /**
     * @return string
     */
    public function getPreferredLanguage(): string
    {
        return $this->preferredLanguage;
    }


}
