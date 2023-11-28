# Dependency Inversion Principle

The Dependency Inversion Principle is one of the five fundamental principles that make up the SOLID principle of software design, proposed by software engineer Robert C. Martin. This principle focuses on the organization of dependencies between the modules of a system, and its summary is as follows:

The Dependency Inversion Principle (DIP) states that:

High-level modules must not depend directly on low-level modules. Both must depend on abstractions.

Abstractions should not depend on details. Details must depend on abstractions.

In other words, this principle promotes reversing the direction of dependencies in a system, so that high-level modules (such as core classes or business policies) do not depend on low-level modules (such as implementation classes or hardware-specific details). Instead, both should depend on common abstractions, which makes the system more flexible, easier to maintain and less prone to disruptive change.

## ¿ What are the benefits of using the Dependency Inversion Principle ?

DIP encourages separation of concerns and allows the replacement of specific components without affecting the behavior of high-level modules, which contributes to the scalability and robustness of the system. In summary, the Dependency Inversion Principle is essential to achieve a more robust and extensible software design.

## Article

https://stackify.com/dependency-inversion-principle/

## Error case

This principle and the Open-Closed Principle are actually related.

We want our classes to be open to extension, so we have reorganized our dependencies to depend on interfaces instead of concrete classes.

Can you fix it??
