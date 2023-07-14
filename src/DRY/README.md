El principio DRY (Don't Repeat Yourself) en programación es una filosofía
que busca evitar la duplicación de código. Su objetivo es reducir la redundancia
y mejorar la mantenibilidad del código.

## Error Case

En el caso de error tenemos dos clases diferentes que son Admistrator y Programmer.
Pero si nos fijamos tienen atributos y métodos identicos por lo que ahí tenemos una 
duplicación de código. 

Cada clase tiene su propia implementación de las mismas propiedades y métodos,
lo cual no sigue el principio DRY.

Al no aplicar el principio DRY, si hay cambios en los métodos comunes, se tendrían
que realizar modificaciones en todas las clases que los implementan.
Además, si se agregan más tipos de usuarios, se duplicaría aún más código.

Por lo tanto, el ejemplo sin aplicar el principio DRY es menos eficiente y más propenso
a errores y dificultades en el mantenimiento a largo plazo.

## Success Case

Para aplicar el principio DRY en el mismo ejemplo, lo que he hecho ha sido crear una clase
abstracta Worker que define las propiedades y los metodos en comun implementados.

Luego, las clases Programmer y Administrator heredan de la clase Worker y solo implementan
los métodos que son propios de cada una de las clases. Pudiendo así acceder a las propiedades
y metodos comunes sin duplicar código.

Al utilizar el principio DRY, evitamos la duplicación de código y tenemos una estructura
más mantenible y escalable para trabajar con diferentes tipos de usuarios.