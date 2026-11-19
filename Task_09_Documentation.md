# Task 9: Eigenvalues and Eigenvectors

## 1. Mathematical Concept

Eigenvalues and eigenvectors are important concepts in linear algebra. They describe how a matrix transforms a vector. An eigenvector is a non-zero vector whose direction does not change when multiplied by a matrix. The eigenvalue indicates how much the vector is scaled.

The relationship is expressed as:

**Av = λv**

Where:
- A represents the matrix.
- v represents the eigenvector.
- λ represents the eigenvalue.

Python's NumPy library provides the `np.linalg.eig()` function for calculating eigenvalues and eigenvectors.

## 2. Original Input Values and Operation

The program used the following matrix:

A = [[4, 1],
     [1, 3]]

The `np.linalg.eig()` function was used to calculate its eigenvalues and eigenvectors.

The calculated eigenvalues were:

- 4.6180
- 2.3820

The program also returned the corresponding eigenvectors.

## 3. Verification of Results

The results were verified using the equation:

**Av = λv**

The program multiplied each eigenvector by the original matrix and compared the result with the eigenvalue multiplied by the same eigenvector.

Both verification checks returned `True`, confirming that the calculated eigenvalues and eigenvectors were correct.

## 4. Changing an Input Value

The first diagonal value of the original matrix was changed from 4 to 5.

The new matrix became:

A = [[5, 1],
     [1, 3]]

The new eigenvalues were:

- 5.4142
- 2.5858

Compared with the original results, both eigenvalues increased. This demonstrates that changing the values in a matrix can affect its eigenvalues and eigenvectors.

## 5. Real-World Application: Website Ranking

The program was modified to demonstrate a simplified website-ranking model.

Three websites were considered:
- Website A
- Website B
- Website C

A transition matrix was created to represent the probability of a visitor moving from one website to another.

The eigenvalues and eigenvectors of the transition matrix were calculated. The eigenvector corresponding to an eigenvalue of 1 was selected and normalized to obtain the ranking scores.

The results were:

| Website | Ranking Score |
|---|---:|
| Website A | 33.33% |
| Website B | 33.33% |
| Website C | 33.33% |

The total ranking score was 1.0, equivalent to 100%.

The three websites received equal scores because the transition matrix distributes movement between them in a balanced way.

## 6. Conclusion

The task demonstrated how Python and NumPy can be used to calculate eigenvalues and eigenvectors. The verification process confirmed that the calculated results satisfied the mathematical relationship. Changing a matrix value also affected the resulting eigenvalues. The website-ranking example showed how eigenvectors can be applied in simplified ranking systems.