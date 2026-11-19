# TASK 4: FLOATING-POINT ARITHMETIC AND NUMERICAL ERRORS

## 1. Objective
The objective of this task was to understand floating-point representation, numerical errors, absolute error, relative error and numerical stability using Python and NumPy.

## 2. Original Problem
Computers represent decimal numbers using binary floating-point numbers. Some decimal values cannot be represented exactly, which may produce small calculation errors.

The program demonstrated this using 0.1 + 0.2 compared with 0.3.

## 3. Inputs and Mathematical Operations
The program used the following inputs:
- 0.1 and 0.2 for floating-point comparison.
- √2 as the true value.
- 1.414 as the approximate value.
- 1.4142 as the modified approximate value.

The mathematical operations included:
- Addition.
- Square root calculation.
- Absolute error calculation.
- Relative error calculation.
- Numerical stability comparison.

Absolute error was calculated as the difference between the true value and approximate value.

Relative error was calculated by dividing absolute error by the absolute value of the true value.

## 4. Results and Interpretation

The first calculation produced 0.30000000000000004 instead of exactly 0.3. This demonstrated the limitations of floating-point representation.

The absolute error when approximating √2 using 1.414 was approximately 0.00021356. The relative error was approximately 0.01510114%.

## 5. Changing an Input Value

The approximate value was changed from 1.414 to 1.4142.

After changing the input:
- New absolute error: 0.00001356.
- New relative error: 0.00095900%.

The results showed that using a more accurate approximation reduced the numerical error.

## 6. Numerical Stability

The program compared a direct mathematical formula with an alternative, more numerically stable formula.

For very small input values, the direct formula produced less accurate results because of floating-point cancellation. The stable formula maintained better accuracy.

## 7. Modified Real-World Application: Banking Interest Calculation

The original example was modified to demonstrate how floating-point errors can affect financial calculations.

The program calculated compound interest using:
- Initial balance: 1,000.
- Monthly interest rate: 1.5%.
- Duration: 12 months.

The final balance was approximately 1,195.62.

A precision check also demonstrated why exact floating-point comparisons can be unreliable.

For actual financial applications, decimal arithmetic should be used when exact monetary values are required.

## 8. Assumptions
- The initial banking balance was assumed to be 1,000.
- The monthly interest rate remained constant at 1.5%.
- Interest was compounded monthly.
- NumPy was used for numerical calculations and tolerance-based comparisons.

## 9. Conclusion

The task demonstrated that floating-point arithmetic can introduce small numerical errors. It also showed how absolute error, relative error and numerical stability can be used to understand and reduce these errors. The banking example demonstrated the importance of numerical accuracy in real-world calculations.