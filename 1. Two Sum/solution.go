func twoSum(nums []int, target int) []int {
    stored := make(map[int]int, len(nums))

    for index, num := range nums {
        if required, ok := stored[num]; ok {
            return []int{required, index}
        }

        stored[target - num] = index
    }

    return nil
}
