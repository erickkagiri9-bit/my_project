# TASK 6: SOLUTION OF SYSTEMS OF LINEAR EQUATIONS

## 1. Objective
The objective of this task was to understand how systems of linear equations can be solved using Python and NumPy. The program demonstrates how unknown values can be calculated from a set of simultaneous equations.

## 2. Original Problem
The original problem involved solving two simultaneous equations:

2x + 3y = 8

4x + y = 6

The equations were represented using a coefficient matrix A and a constant vector b. NumPy's `np.linalg.solve()` function was used to calculate the unknown values.

## 3. Inputs and Mathematical Operations

The inputs included:
- Coefficients 2, 3, 4 and 1.
- Constant values 8 and 6.

The mathematical operations involved:
- Representing equations using matrices.
- Solving simultaneous linear equations.
- Matrix multiplication for verification.
- Calculating the residual to check accuracy.

The general matrix representation was Ax = b, where A represents the coefficients, x represents the unknown values and b represents the known constants.

## 4. Original Results and Interpretation

The program produced the following solution:

x = 1

y = 2

The solution was verified through matrix multiplication, which reproduced the original constant values of 8 and 6.

This confirmed that the calculated values satisfied both equations.

## 5. Changing an Input Value

The first equation's constant was changed from 8 to 10.

The modified equations were:

2x + 3y = 10

4x + y = 6

The new results were:

x = 0.8

y = 2.8

The results demonstrated that changing an input value affects the solution of a system of linear equations.

## 6. Modified Real-World Application: Server Resource Allocation

The original example was modified to demonstrate how simultaneous equations can be used to determine the number of active servers in a computing environment.

Two server types were considered:

- Type A uses 4 CPU units and 8 GB of memory.
- Type B uses 2 CPU units and 12 GB of memory.

The total available resource usage was 20 CPU units and 72 GB of memory.

The program used NumPy to solve the equations and determine the number of servers of each type.

The results were:
- Type A servers: 3
- Type B servers: 4

The calculated resource usage matched the given totals.

## 7. Assumptions
- Only two types of servers were considered.
- Each server was assumed to consume a constant amount of CPU and memory.
- The total resource usage was assumed to be accurate.
- The number of servers was assumed to be non-negative whole numbers.

## 8. Conclusion

The task demonstrated how Python and NumPy can solve systems of linear equations efficiently. Changing an input value affected the calculated solution, while the server resource allocation example demonstrated how simultaneous equations can help determine unknown quantities in real-world computing environments.