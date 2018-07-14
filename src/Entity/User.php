<?php
namespace App\Entity;

use App\Utility\GeneralUtility;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="imhhfs_user")
 */
class User extends \App\MappedSuperclass\LowerCaseUniqueName
{
    
    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="users")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $role;
    
    /**
     * @ORM\OneToMany(targetEntity="RecoveryCode", mappedBy="user")
     */
    private $recoveryCodes;
    
    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="user")
     */
    private $files;
    
    /**
     * @ORM\Column(type="string")
     */
    private $pass;
    
    /**
     * @ORM\Column(type="boolean", name="two_factor")
     */
    private $twoFactor = 0;
    
    /**
     * @ORM\Column(type="string", name="two_factor_secret")
     */
    private $twoFactorSecret = '';

    public function __construct() {
        $this->recoveryCodes = new ArrayCollection();
        $this->files = new ArrayCollection();
    }

    /**
     * Get $recoveryCodes
     * 
     * @return ArrayCollection
     */
    public function getRecoveryCodes() {
        return $this->recoveryCodes;
    }

    /**
     * Get $files
     * 
     * @return ArrayCollection
     */
    public function getFiles() {
        return $this->files;
    }

    /**
     * Get $pass
     * 
     * @return string
     */
    public function getPass() {
        return $this->pass;
    }
    
    /**
     * Set $pass
     * 
     * @param string $pass
     */
    public function setPass($pass) {
        $this->pass = GeneralUtility::encryptPassword($pass);
        
        return $this;
    }
    
    /**
     * Get $role
     * 
     * @return Role
     */
    public function getRole() {
        return $this->role;
    }
    
    /**
     * Set $role
     * 
     * @param Role $role
     */
    public function setRole($role) {
        $this->role = $role;
        
        return $this;
    }
    
    /**
     * Has $twoFactor
     * 
     * @return boolean
     */
    public function hasTwoFactor() {
        return $this->twoFactor;
    }
    
    /**
     * Set $twoFactor
     * 
     * @param boolean $twoFactor
     */
    public function setTwoFactor($twoFactor) {
        $this->twoFactor = $twoFactor;
        
        return $this;
    }

    /**
     * Get $twoFactorSecret
     * 
     * @return string
     */
    public function getTwoFactorSecret() {
        return $this->twoFactorSecret;
    }
    
    /**
     * Set $twoFactorSecret
     * 
     * @param string $twoFactorSecret
     */
    public function setTwoFactorSecret($twoFactorSecret) {
        $this->twoFactorSecret = $twoFactorSecret;
        
        return $this;
    }
}