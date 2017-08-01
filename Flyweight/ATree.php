<?php



abstract class ATree implements IMesh, IBark, ITexture
{
    protected $mesh;
    protected $bark;
    protected $texture;

    public function __construct()
    {
        $this->bark = new Bark();
        $this->mesh = new Mesh();
        $this->texture = new Texture();
    }

    /**
     * @return Mesh
     */
    public function getMesh()
    {
        return $this->mesh;
    }

    /**
     * @return Bark
     */
    public function getBark()
    {
        return $this->bark;
    }

    /**
     * @return Texture
     */
    public function getTexture()
    {
        return $this->texture;
    }
}