# [Feature envy] (https://refactoring.guru/es/smells/feature-envy)

## Practical Example

In the example we have 2 classes:
1 - Branch Office
2 - Employee

### Branch Office
Here we have an attribute that's an array of Employees, and some functions you can use to interact with the Employees.

### Employee
It's a simple class of an object with some attributes and functions.

## Error case
In one of branch office function we are breaking the feature envy:

```php
private function calculateSalaryOfEmployee(Employee $employee): float
{
    $totalHours = $employee->getWorkedHours();
    switch ($employee->getKindOfBranchOffice()){
        case self::ELECTRICITY:
            $totalHours = $totalHours + 8;
            break;
        case self::GAS:
            $totalHours = $totalHours + 4;
            break;
        case self::WATER:
            $totalHours = $totalHours + 1;
            break;
    }
    return $employee->getPricePerHour() * $totalHours;
}
```

Why? Because we are accessing more data of employee than data of branch office.

Can you fix it??
