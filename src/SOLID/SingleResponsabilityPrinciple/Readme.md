# Single Responsability Principle

Single Responsibility Principle (SRP): A class must have a single reason to change.
This means that a class or module should have a single responsibility in the system and should
not be overloaded with multiple tasks or functions. Maintaining single responsibility helps improve
code readability, maintainability and extensibility by reducing complexity and side effects.

In simpler terms, each class should do one thing and do it well. This principle promotes better
code organization and makes it easier to adapt to future changes by minimizing the impact of a
modification on other parts of the system.

## Error case

In the BranchOffice we have more than one responsibility, so we are breaking the principle of single responsibility.

Can you fix it??