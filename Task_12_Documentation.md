# Task 12: Polynomial and Nonlinear Equation Solving

## 1. Mathematical Concept

Polynomial and nonlinear equations are mathematical expressions used to describe relationships between variables.

A polynomial equation contains terms with different powers of a variable. Nonlinear equations are equations that do not form a straight-line relationship.

Python provides numerical tools for solving these equations. In this task, NumPy's `np.roots()` function was used to calculate polynomial roots, while SciPy's `fsolve()` function was used to solve a nonlinear equation.

## 2. Original Input Values and Operation

The first polynomial used was:

x² - 5x + 6 = 0

The coefficients were entered into NumPy as:

[1, -5, 6]

The calculated roots were:

- First root: 3
- Second root: 2

The roots were verified by substituting them back into the original equation. The resulting values were extremely close to zero, confirming the accuracy of the calculations.

## 3. Changing a Polynomial Coefficient

The constant value was changed from 6 to 4.

The new polynomial became:

x² - 5x + 4 = 0

The new roots were:

- First root: 4
- Second root: 1

The results show that changing a polynomial coefficient affects its roots.

## 4. Nonlinear Equation Solving

The nonlinear equation used was:

x³ - 2x - 5 = 0

The SciPy `fsolve()` function was used with an initial guess of 2.0.

The results were:

- Initial guess: 2.0
- Calculated root: 2.0945514815
- Function value at root: approximately zero

This confirms that the numerical method successfully found a solution to the nonlinear equation.

## 5. Changing the Initial Guess

The initial guess was changed from 2.0 to 3.0.

The new results were:

- New initial guess: 3.0
- Calculated root: 2.0945514815
- Function value at root: approximately zero

The final answer remained almost identical despite changing the starting estimate. This shows that the method was able to converge to the same root using both initial guesses.

## 6. Real-World Application: Rectangular Garden Dimensions

The program was modified to calculate the dimensions of a rectangular garden with an area of 40 square metres.

The length was assumed to be 3 metres greater than the width.

Let the width be x.

Therefore:

Length = x + 3

Area = Length × Width

Substituting the values:

x(x + 3) = 40

Rearranging:

x² + 3x - 40 = 0

The polynomial roots were calculated using NumPy. Since a garden cannot have a negative width, only the positive root was selected.

The results were:

- Required area: 40 square metres
- Garden width: 5 metres
- Garden length: 8 metres
- Verified area: 40 square metres

The results confirm that a garden measuring 5 metres by 8 metres has the required area.

## 7. Conclusion

The task demonstrated how NumPy and SciPy can be used to solve polynomial and nonlinear equations. Changing a polynomial coefficient affected the calculated roots, while changing the initial guess still produced approximately the same nonlinear solution. The garden example demonstrated how polynomial equations can be used to solve practical measurement problems.