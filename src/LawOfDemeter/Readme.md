# [Ley de demeter](https://betterprogramming.pub/demeters-law-don-t-talk-to-strangers-87bb4af11694) 



Dentro de un método del objeto A sólo se puede llamar a métodos M de:
 - Métodos declarados del objeto A
 - Objetos creados dentro del método M
 - 

Llamadas a métodos permitidos:
 - El objeto A solo se puede llamar a métodos definidos en ese propio objeto A
 - A métodos del objeto B que se devuelve al llamar a un método del objeto A
 - A métodos del objeto B que se pasa como argumento al método del objeto A
 - A un objeto B que se guarda en una propiedad del objeto A
 - Dentro del método del objeto A, a cualquier objeto que se cree en ese método


 - El objeto solo se puede llamar a métodos suyos
 - A los parámetros de los métodos a los que puede llamar
 - Cualquier objeto creado o instanciado dentro del método
 - Objetos directos del propio objeto
 - A variables globales accesible por el objeto en el ámbito del método
