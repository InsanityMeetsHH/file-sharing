<?php
namespace App\Entity;

use App\Utility\GeneralUtility;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;

/**
 * @ORM\Entity
 * @ORM\Table(name="imhhfs_user")
 */
class User extends \App\MappedSuperclass\Base
{
    
    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string")
     */
    private $pass;
    
    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="users")
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $role;
    
    /**
     * One User has many RecoveryCodes.
     * 
     * @ORM\OneToMany(targetEntity="RecoveryCode", mappedBy="user")
     */
    private $recoveryCodes;
    
    /**
     * @ORM\Column(type="boolean", name="two_factor")
     */
    private $twoFactor = FALSE;
    
    /**
     * @ORM\Column(type="string", name="two_factor_secret")
     */
    private $twoFactorSecret = '';
    
    /**
     * @ORM\OneToMany(targetEntity="File", mappedBy="user")
     * @ORM\OrderBy({"createdAt" = "DESC"})
     */
    private $files;

    public function __construct() {
        $this->recoveryCodes = new ArrayCollection();
        $this->files = new ArrayCollection();
    }

    /**
     * Get $name
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * Set $name
     * 
     * @param string $name
     */
    public function setName($name) {
        $this->name = strtolower($name);
        
        return $this;
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
     * Get files with file_included = FALSE
     * 
     * @return ArrayCollection
     */
    public function getUniqueFiles() {
        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq('fileIncluded', FALSE))
            ->orderBy(['createdAt' => Criteria::DESC]);
        
        return $this->files->matching($criteria);
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