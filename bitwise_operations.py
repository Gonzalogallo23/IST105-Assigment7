import sys
import json

def process_numbers(numbers, threshold):
    
    try:
        num_list = list(map(int, numbers.split(",")))
        threshold = int(threshold)

        bitwise_and = num_list[0]
        bitwise_or = num_list[0]
        bitwise_xor = num_list[0]

        for num in num_list[1:]:
            bitwise_and &= num
            bitwise_or |= num
            bitwise_xor ^= num

        filtered_numbers = [num for num in num_list if num > threshold]

        result = {
            "bitwise_and": bitwise_and,
            "bitwise_or": bitwise_or,
            "bitwise_xor": bitwise_xor,
            "filtered_numbers": filtered_numbers
        }

        print(json.dumps(result))

    except Exception as e:
        print(json.dumps({"error": str(e)}))

if __name__ == "__main__":
    if len(sys.argv) == 3:
        process_numbers(sys.argv[1], sys.argv[2])
    else:
        print(json.dumps({"error": "Invalid input"}))
