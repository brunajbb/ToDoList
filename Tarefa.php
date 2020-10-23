<? php

classe  Tarefa
{
    private  $ id ;
    private  $ status ;
    private  $ nome ;
    private  $ descricao ;
    private  $ dataLimite ;

     função  pública __construct ( int  $ status , string  $ nome , string  $ descricao , string  $ dataLimite )
    {
       $ this -> status = $ status ;
       $ this -> nome    = $ nome ;
       $ this -> descricao = $ descricao ;
       $ this -> dataLimite = $ dataLimite ;
    }

    public  function  getId ()
    {
        return  $ this -> id ;
    }

     função  pública setId ( int  $ id )
    {
        $ this -> id = $ id ;
    }

    public  function  getStatus ()
    {
        retornar  $ this -> status ;
    }

     função  pública setStatus ( int  $ status )
    {
        $ this -> status = $ status ;
    }

    public  function  getNome ()
    {
        return  $ this -> nome ;
    }

    public  function  setNome ( string  $ nome )
    {
        $ this -> nome = $ nome ;
    }

    public  function  getDescricao ()
    {
        return  $ this -> descricao ;
    }

    public  function  setDescricao ( string  $ descricao )
    {
        $ this -> descricao = $ descricao ;
    }

    public  function  getDataLimite ()
    {
        return  $ this -> dataLimite ;
    }

    public  function  setDataLimite ( string  $ dataLimite )
    {
       $ this -> dataLimite = $ dataLimite ;
    }

} 
