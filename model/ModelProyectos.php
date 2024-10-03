<?php

class Proyectos
{
    private $conexion;
    private $id_proyecto;
    private string $titulo;
    private string $link;
    private string $img;
    private string $descripcion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    //SETTERS
    public function setConexion(object $conexion)
    {
        $this->conexion = $conexion;
    }
    public function setIdProyecto(string $id_proyecto)
    {
        $this->id_proyecto = $id_proyecto;
    }
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }
    public function setLink(string $link)
    {
        $this->link = $link;
    }
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function setImg(string $img)
    {
        $this->img = $img;
    }
    //GETTERS
    public function getConexion()
    {
        return $this->conexion;
    }
    public function getIdProyecto()
    {
        return $this->id_proyecto;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getLink()
    {
        return $this->link;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getImg()
    {
        return $this->img;
    }
}