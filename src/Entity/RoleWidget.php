<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoleWidgetRepository")
 */
class RoleWidget
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $role_id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $widget_id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Widget", inversedBy="roleWidgets")
     */
    private $widget;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AccountRole", inversedBy="roleWidget")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="role_id")
     */
    private $accountRole;

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(int $role_id): self
    {
        $this->role_id = $role_id;

        return $this;
    }

    public function getWidgetId(): ?int
    {
        return $this->widget_id;
    }

    public function setWidgetId(int $widget_id): self
    {
        $this->widget_id = $widget_id;

        return $this;
    }
}
