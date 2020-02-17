<?php

namespace App\Comment\Infrastructure;

use App\Comment\Domain\CommentRepositoryInterface;
use App\Comment\Domain\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommentEndpoint extends AbstractController
{
    private $commentRepository;

    public function __construct(CommentRepositoryInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getCommentAsJson(int $commentId): JsonResponse
    {
        /** @var Comment $comment */
        $comment = $this->commentRepository->getCommentById($commentId);

        $commentResponse = [
            'comment' =>[
                'userId' => $comment->getUserId(),
                'topicId' => $comment->getTopicId(),
                'comment' => $comment->getComment()
            ]
        ];

        return new JsonResponse($commentResponse);
    }

}