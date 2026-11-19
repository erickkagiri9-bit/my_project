# TASK 7: GAUSSIAN ELIMINATION AND LU DECOMPOSITION

## 1. Objective

The objective of this task was to understand and implement Gaussian elimination and LU decomposition in solving systems of linear equations using Python.

## 2. Mathematical Concept

Gaussian elimination is a numerical method used to solve simultaneous linear equations. It works by transforming a coefficient matrix into an upper triangular form through row operations. The unknown values are then obtained using back-substitution.

LU decomposition is another method that separates a coefficient matrix into two triangular matrices: a lower triangular matrix (L) and an upper triangular matrix (U). This makes it easier to solve multiple systems that share the same coefficient matrix but have different constant values.

## 3. Original Problem and Input Values

The program used the following system of equations:

2x + y - z = 8

-3x - y + 2z = -11

-2x + y + 2z = -3

The coefficient matrix was:

A = [[2, 1, -1], [-3, -1, 2], [-2, 1, 2]]

The constant vector was:

b = [8, -11, -3]

The main mathematical operation involved Gaussian elimination, followed by back-substitution to obtain the unknown values.

## 4. Gaussian Elimination Results

The program transformed the augmented matrix into an upper triangular matrix by eliminating variables row by row.

The resulting solution was:

- x = 2
- y = 3
- z = -1

The solution was verified by multiplying the original coefficient matrix by the calculated values. The result was [8, -11, -3], which matched the original constant vector.

This confirmed that the solution was correct.

## 5. Changing an Input Value

To observe how changing an input affects the solution, the first constant value was changed from 8 to 9.

The new constant vector became:

b = [9, -11, -3]

The new solution was:

- x = 6
- y = 1
- z = 4

The results show that changing one constant value can change all the unknown values in a system of linear equations.

The new solution was also verified successfully.

## 6. LU Decomposition Results

The program used SciPy's LU factorisation function to factorise the original coefficient matrix.

After factorisation, the program solved two systems using the same factorisation but different constant vectors.

The first system produced:

[2, 3, -1]

The second system produced:

[6, 1, 4]

Both solutions matched the results obtained earlier.

This demonstrated that LU decomposition can save time when solving several systems that use the same coefficient matrix.

## 7. Modified Real-World Application: Engineering Simulation

A modified example was developed based on an engineering simulation system.

In this example, an engineering simulation uses the same coefficient matrix to represent relationships between three unknown system variables. However, the measurement values change during different simulation periods.

The program used two sets of measurements:

- Period 1: [8, -11, -3]
- Period 2: [10, -11, -3]

The LU factorisation was reused to solve both systems.

The results were:

**Simulation period 1:**

[2, 3, -1]

**Simulation period 2:**

[10, -1, 9]

The results show that the system can calculate new variable values without repeating the entire factorisation process.

## 8. Assumptions

- The coefficient matrix remains unchanged during the simulation periods.
- The measurement values can change between simulation periods.
- The coefficient matrix is suitable for LU factorisation.
- The input values are numerical and the system has a unique solution.

## 9. Conclusion

The task successfully demonstrated how Gaussian elimination and LU decomposition can be used to solve systems of linear equations.

Gaussian elimination provided the solution through forward elimination and back-substitution. LU decomposition showed how a matrix can be factorised and reused when solving systems with different constant values.

The engineering simulation example demonstrated the usefulness of LU decomposition in applications where the coefficient matrix remains the same but new measurements are received.