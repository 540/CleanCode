# [Tell don't ask](https://martinfowler.com/bliki/TellDontAsk.html)

The "Tell, Don't Ask" principle is a software design principle that promotes encapsulation and abstraction in object-oriented programming. This principle suggests that instead of asking an object about its internal state and then making decisions based on that information, the responsibility for taking actions should be delegated to the object itself.

In other words, instead of requesting data from an object and then deciding what to do with that data from outside the object, the object should be allowed to perform the actions internally. This promotes greater cohesion and helps reduce dependency between classes, which makes the code more maintainable and flexible.

The "Tell, Don't Ask" principle encourages the creation of methods and operations on objects that encapsulate the logic and behavior necessary to accomplish a task, rather than exposing their internal data for other objects to manipulate directly. This improves modularity and the ability to extend and modify code without affecting other parts of the system.

## Error case

```php
if ($employee->getHourPrice() * $employee->getWorkedHours() > 750) {
    $namesWithBigSalary[] = $employee->getName();
}
```

Why? We are requesting the data from the object rather than allowing the object to perform the actions.

Can you fix it??