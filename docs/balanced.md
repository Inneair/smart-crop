# Balanced

### Objective

This method is a way to find the coordinate of the most important point in an image.

### How does it work?

To find the most important point we have 3 steps : 
1. Dividing the image into four equally squares
2. Find the most energetic point per square (almost the same way than entropy mode)
3. Finding the images weighted mean interest point

### Advantages

The most important advantage of this way to crop an image is that you don't have to indicate the coordinate for the
cropping. Especially if you want to crop many photos in same time but without the same starting point.