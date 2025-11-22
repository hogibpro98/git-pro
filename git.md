## git merge
### When you want to merge a branch into your current branch but want to review the changes before committing, you can use the --no-commit and --no-ff options.
```
git merge [branch name] --no-commit --no-ff
```

## git stash
### When you coding other branch but your boss call you to fix a bug in another branch, you can use git stash to save your current changes temporarily.
```
git stash
git checkout [bug-fix-branch]
// fix bug here
git commit -m "fix bug"
git checkout [your-working-branch]
git stash pop
```

## git revert
### When you want to undo a specific commit without changing the commit history, you can use git revert.
```
# Tìm ID của cái merge commit vừa rồi (ví dụ: abc1234)
git log --oneline

# Revert lại cái merge commit đó
# -m 1: Là tham số bắt buộc khi revert một lệnh merge (chọn giữ lại nhánh cha chính)
git revert -m 1 abc1234

# Đẩy lên server an toàn (không cần -f)
git push origin staging
```

## git cherry-pick
### When you want to apply a specific commit from another branch into your current branch, you can use git cherry-pick.
```
git checkout [your-branch]
git cherry-pick -x [commit-hash] or [many commit-hash]
🛑 Nếu có conflict
Sửa file conflict → rồi chạy:
git add .
git cherry-pick --continue
🛑 Nếu bạn muốn bỏ cherry-pick (hủy)
git cherry-pick --abort
git log --oneline --grep="no"
```

## git reset
### When you want to undo your last commit but keep the changes in your working directory, you can use git reset --soft.
```
git reset --soft HEAD~1
or git reset --soft [commit-hash]
```

## git squash
### When you want to combine multiple commits into a single commit for a cleaner history, you can use git squash during an interactive rebase.
```
git checkout [feature-branch]
git log --oneline [main, staging, prod]..[your-branch]
git rebase -i HEAD~[number-of-commits]
# Một trình soạn thảo hiện ra, giữ dòng đầu là 'pick', sửa 9 dòng dưới thành 'squash' (hoặc 's')
# Lưu lại và sửa message commit cuối cùng
```

## git rebase
### When you want to update your feature branch with the latest changes from the main branch, you can use git rebase.
```
git checkout [feature-branch]
git rebase main
```
