# DRY Principle (Don't Repeat Yourself)

The DRY (Don't Repeat Yourself) Principle in programming is a philosophy
that seeks to avoid code duplication. Its goal is to reduce redundancy
and improve code maintainability.

### Article
https://medium.com/@Ialimijoro/the-dry-principle-and-why-you-should-use-it-f02435ae9449

## Error Case

In the error case we have two different classes which are Developer and Leader.
But if we look at them they have identical attributes and methods so there we have a duplication of code.

Each class has its own implementation of the same properties and methods,
which does not follow the DRY principle.

By not applying the DRY principle, if there are changes in the common methods, modifications would have to be made in all the classes that have the same properties and methods.
modifications would have to be made in all the classes that implement them.
In addition, if more user types are added, even more code would be duplicated.

Therefore, the example without applying the DRY principle is less efficient and more prone to errors and maintenance difficulties.
and more prone to errors and difficulties in long-term maintenance.
