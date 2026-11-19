# TASK 5: MATRIX ALGEBRA AND MATRIX OPERATIONS

## 1. Objective
The objective of this task was to understand how matrices are used to organize numerical values and perform mathematical operations. The program demonstrates matrix addition, multiplication, rotation, scaling and determinants using Python and NumPy.

## 2. Original Problem
The original problem involved a computer graphics program that needed to rotate and resize a square object represented by four coordinate points.

The program used rotation and scaling matrices to transform the original coordinates.

## 3. Inputs and Mathematical Operations

The original inputs included:
- Four coordinate points representing a square.
- A rotation angle of 45 degrees.
- A scaling factor of 2 horizontally.
- A scaling factor of 1.5 vertically.

The mathematical operations included:
- Matrix multiplication.
- Matrix addition.
- Rotation transformation.
- Scaling transformation.
- Determinant calculation.

The NumPy `@` operator was used for matrix multiplication, while the `+` operator performed matrix addition.

## 4. Results and Interpretation

The program successfully transformed the original square coordinates using rotation and scaling matrices.

The combined transformation matrix had a determinant of approximately 3.

The determinant indicates that the transformation is invertible because its value is not zero.

The transformed coordinates showed that the original square had been rotated and resized.

## 5. Changing an Input Value

The original rotation angle of 45 degrees was changed to 90 degrees.

After changing the angle, the transformed coordinates changed accordingly.

This demonstrated that changing the rotation angle affects the position and orientation of an object in a computer graphics application.

## 6. Matrix Addition and Multiplication

Two matrices were used to demonstrate basic matrix operations.

Matrix A:
[[1, 2], [3, 4]]

Matrix B:
[[5, 6], [7, 8]]

The addition produced:
[[6, 8], [10, 12]]

The multiplication produced:
[[19, 22], [43, 50]]

These results demonstrated how NumPy performs matrix addition and multiplication.

## 7. Modified Real-World Application: Classroom Floor Plan

The original computer graphics example was modified to represent a classroom floor plan.

The classroom was represented using four coordinate points:
- (0, 0)
- (4, 0)
- (4, 3)
- (0, 3)

A scaling matrix with a factor of 2 was applied to the coordinates.

The resulting coordinates represented a floor plan with dimensions of 8 by 6 units.

This demonstrated how matrix transformations can be applied when resizing objects in digital floor plans and design applications.

## 8. Assumptions
- The original object was assumed to be a square.
- The rotation was performed around the origin.
- Scaling was applied equally in the modified classroom example.
- The coordinate values were assumed to represent units in a digital design.

## 9. Conclusion

The task demonstrated how matrix algebra can be applied in computer graphics and other real-world applications. Matrix addition and multiplication were successfully performed, while rotation and scaling transformations changed the coordinates of objects. The classroom floor plan example further demonstrated the practical use of matrix operations in digital design.