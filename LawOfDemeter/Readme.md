# [Ley de demeter](https://betterprogramming.pub/demeters-law-don-t-talk-to-strangers-87bb4af11694) 




Llamadas permitidas:
 - El objeto solo se puede llamar a métodos suyos
 - A los parámetros de los métodos a los que puede llamar
 - Cualquier objeto creado o instanciado dentro del método
 - Objetos directos del propio objeto
 - A variables globales accesible por el objeto en el ámbito del método
